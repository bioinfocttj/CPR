/*
 * =============================================================================
 * Simplified BSD License, see http://www.opensource.org/licenses/
 * -----------------------------------------------------------------------------
 * Copyright (c) 2008-2009, Marco Terzer, Zurich, Switzerland
 * All rights reserved.
 * 
 * Redistribution and use in source and binary forms, with or without 
 * modification, are permitted provided that the following conditions are met:
 * 
 *     * Redistributions of source code must retain the above copyright notice, 
 *       this list of conditions and the following disclaimer.
 *     * Redistributions in binary form must reproduce the above copyright 
 *       notice, this list of conditions and the following disclaimer in the 
 *       documentation and/or other materials provided with the distribution.
 *     * Neither the name of the Swiss Federal Institute of Technology Zurich 
 *       nor the names of its contributors may be used to endorse or promote 
 *       products derived from this software without specific prior written 
 *       permission.
 * 
 * THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND CONTRIBUTORS "AS IS" 
 * AND ANY EXPRESS OR IMPLIED WARRANTIES, INCLUDING, BUT NOT LIMITED TO, THE 
 * IMPLIED WARRANTIES OF MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE 
 * ARE DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS BE 
 * LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL, EXEMPLARY, OR 
 * CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED TO, PROCUREMENT OF 
 * SUBSTITUTE GOODS OR SERVICES; LOSS OF USE, DATA, OR PROFITS; OR BUSINESS 
 * INTERRUPTION) HOWEVER CAUSED AND ON ANY THEORY OF LIABILITY, WHETHER IN 
 * CONTRACT, STRICT LIABILITY, OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) 
 * ARISING IN ANY WAY OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE 
 * POSSIBILITY OF SUCH DAMAGE.
 * =============================================================================
 */
package ch.javasoft.metabolic.efm.adj.incore.tree;

import java.io.IOException;
import java.util.Queue;

import ch.javasoft.bitset.IBitSet;
import ch.javasoft.metabolic.efm.column.AdjCandidates;
import ch.javasoft.metabolic.efm.column.Column;
import ch.javasoft.metabolic.efm.column.ColumnPair;
import ch.javasoft.metabolic.efm.memory.SortableMemory;
import ch.javasoft.metabolic.efm.util.BitSetUtil;

public class EmptyLeaf<T /*traversing token*/> extends Node<T> {

	public static EmptyLeaf<?> INSTANCE = new EmptyLeaf<Object>();
	
	@SuppressWarnings("unchecked")
	public static <TT> EmptyLeaf<TT> instance() {
		return (EmptyLeaf<TT>)INSTANCE;
	}
	protected EmptyLeaf() {
		super(BitSetUtil.factory().create());
	}
	@Override
	public void addAdjacentPairs(T token, Root<T> root, SortableMemory<Column> posCols, SortableMemory<Column> zeroCols, SortableMemory<Column> negCols, Node<T> partner, boolean thisIsPos, Queue<ColumnPair> adjacentPairs) throws IOException {
		//nothing to do
	}
	@Override
	public IBitSet filterAdjacentPairs(IBitSet filterCutPattern, SortableMemory<Column> cols, AdjCandidates<Column> adjCandidates) throws IOException {
		return filterCutPattern;
	}
}
